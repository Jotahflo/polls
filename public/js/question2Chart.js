var backgroundColorChart2 = [];

var dynamicColors = function() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return "rgb(" + r + "," + g + "," + b + ")";
};

for (let i = 0; i < dataQuestion2Chart.length; i++) {
  backgroundColorChart2.push(dynamicColors());
}

const dataQuestion2 = {
  labels: labelsQuestion2Chart,
  datasets: [
    {
      label: "Los generos que más contestaron",
      data: dataQuestion2Chart,
      backgroundColor: backgroundColorChart2,
      hoverOffset: 4,
    },
  ],
};

const configQuestion2 = {
  type: "doughnut",
  data: dataQuestion2,
  options: {
    plugins: {
      title: {
        display: true,
        text: dataQuestion2.datasets[0].label,
      },
      legend: {
        display: true,
        position: "bottom",
      },
    },
  },
};

var question2Chart = new Chart(
  document.getElementById("question2Chart"),
  configQuestion2
);
