const mysql = require('mysql');

// Create a connection to the MySQL database
const connection = mysql.createConnection({
  host: 'mysql_db',
  user: 'root',
  password: 'root',
  database: 'eleccare'
});

let hoistedValue = 0;

function updateChart() {
  connection.query('SELECT * FROM your_table', (error, results) => {
    if (error) {
      console.error(error);
      return;
    }

    const date = results.map((row) => row.date);
    const value = results.map((row) => row.power);
    const value1 = results.map((row) => row.energy);

    if (myChart.data.labels.length > 100) {
      myChart.data.labels.shift();
      myChart.data.datasets[0].data.shift();
      myChart.data.datasets[1].data.shift();
    }

    myChart.data.labels.push(date[hoistedValue]);
    myChart.data.datasets[0].data.push(value[hoistedValue]);
    myChart.data.datasets[1].data.push(value1[hoistedValue]);
    myChart.update();
    hoistedValue++;
  });
}

setInterval(updateChart, 700);

// Rest of the code remains the same
