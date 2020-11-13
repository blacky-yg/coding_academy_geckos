const express = require('express')
const app = express()
const cors = require('cors')
const bodyParser = require('body-parser')
const mysql = require('mysql')

app.use(cors())
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({
    extended: true
}));

var server = app.listen(3000, "127.0.0.1", () => {
    var host = server.address().address
    var port = server.address().port
    console.log("Example app listening at http://%s:%s", host, port)
})

const db = mysql.createConnection({
    host: "localhost",
    user: 'phpmyadmin',
    password: "19Hamid_yg",
    database: "movies"
})

db.connect()

db.on("error", function(err) {
    if (err) {
      console.error('error connecting: ' + err.stack);
      return;
    }
});

app.get('/api/movies', function(req, res) {
    let sql = `SELECT * FROM movies LIMIT 20`
    db.query(sql, function(err, data, fields) {
        if (err)
            console.log("Error");
        res.send(data)
    })
})

app.get('/api/movies/:id', function(req, res) {
    let id = req.params.id;
    if (!id)
        return res.status(400).send({ error: true, message: 'Please provide book id' });
    let sql = `SELECT * FROM movies WHERE id=?`
    db.query(sql, id, function(err, data, fields) {
        if (err)
            console.log("Error");
        res.send(data)
    })
})

app.get('/api/movies/:id/genres', function(req, res) {
    let id = req.params.id;
    if (!id)
        return res.status(400).send({ error: true, message: 'Please provide book id' });
    let sql = `SELECT genres.name FROM genres INNER JOIN movies ON genres.id = movies.genre_id WHERE movies.id=?`
    db.query(sql, id, function(err, data, fields) {
        if (err)
            console.log("Error");
        res.send(data)
    })
})

app.get('/api/movies/:id/producers', function(req, res) {
    let id = req.params.id;
    if (!id)
        return res.status(400).send({ error: true, message: 'Please provide book id' });
    let sql = `SELECT producers.name FROM producers INNER JOIN movies ON producers.id = movies.producer_id WHERE movies.id=?`
    db.query(sql, id, function(err, data, fields) {
        if (err)
            console.log("Error");
        res.send(data)
    })
})

module.exports = app