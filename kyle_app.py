from flask import Flask, render_template
app = Flask(__name__)

@app.route("/")
def index():
    return render_template('index.html')

@app.route("/submit")
def submit():
    return render_template('submit.html')

@app.route("/explore")
def explore():
    return render_template('explore.html')

if __name__ == "__main__":
    app.run()
