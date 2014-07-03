# Imports of modules we'll use
from constants import *
from flask import Flask, render_template
from flask.ext.babel import Babel
from flask.ext.sqlalchemy import SQLAlchemy
from flask.ext.user import current_user, login_required, UserManager, UserMixin, SQLAlchemyAdapter

# Configure the Flask app with options settings
app = Flask(__name__)
app.config.update(
    SECRET_KEY = KYLE_SECRET_KEY,
    SQLALCHEMY_DATABASE_URI = KYLE_DATABASE_URI,
    CSRF_ENABLED = True,
    USER_ENABLE_EMAIL = False,
    DEBUG = False
  )

# Instantiate the DB adapter and Babel (required for Flask-User)
db = SQLAlchemy(app)
babel = Babel(app)

# Define User model with basic required fields
class User(db.Model, UserMixin):
    id = db.Column(db.Integer, primary_key=True)
    active = db.Column(db.Boolean(), nullable=False, default=False)
    username = db.Column(db.String(50), nullable=False, unique=True)
    password = db.Column(db.String(255), nullable=False, default='')

# Create all database tables
db.create_all()

# Setup Flask-User by linking to DB table
db_adapter = SQLAlchemyAdapter(db,  User)
user_manager = UserManager(db_adapter, app)


@app.route("/")
def index():
    return render_template('index.html')

@app.route("/submit")
@login_required
def submit():
    return render_template('submit.html')

@app.route("/explore")
def explore():
    return render_template('explore.html')

@app.route("/connect")
def connect():
    return render_template('connect.html')


# If we're running locally from server, then bind to all interfaces
if __name__ == "__main__":
    app.run(host='0.0.0.0')
