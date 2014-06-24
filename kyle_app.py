from constants import *
from flask import Flask, render_template
from flask.ext.babel import Babel
from flask.ext.sqlalchemy import SQLAlchemy
from flask.ext.user import current_user, login_required, UserManager, UserMixin, SQLAlchemyAdapter
app = Flask(__name__)

app.config.update(
    SECRET_KEY = KYLE_SECRET_KEY,
    SQLALCHEMY_DATABASE_URI = KYLE_DATABASE_URI,
    CSRF_ENABLED = True,
    USER_ENABLE_EMAIL = False,
    DEBUG = False
  )

db = SQLAlchemy(app)
babel = Babel(app)


# Define User model. Make sure to add flask.ext.user UserMixin!!
class User(db.Model, UserMixin):
    id = db.Column(db.Integer, primary_key=True)
    active = db.Column(db.Boolean(), nullable=False, default=False)
    username = db.Column(db.String(50), nullable=False, unique=True)
    password = db.Column(db.String(255), nullable=False, default='')

# Create all database tables
db.create_all()

# Setup Flask-User
db_adapter = SQLAlchemyAdapter(db,  User)       # Select database adapter
user_manager = UserManager(db_adapter, app)     # Init Flask-User and bind to app


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

if __name__ == "__main__":
    app.run(host='0.0.0.0')
