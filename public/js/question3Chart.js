var backgroundColorChart3 = [];

var dynamicColors = function() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return "rgb(" + r + "," + g + "," + b + ")";
};

for (let i = 0; i < dataQuestion3Chart.length; i++) {
  backgroundColorChart3.push(dynamicColors());
}

const dataQuestion3 = {
  labels: labelsQuestion3Chart,
  datasets: [
    {
      label: "Los hobbys mas seleccionados",
      data: dataQuestion3Chart,
      backgroundColor: backgroundColorChart3,
      hoverOffset: 4,
    },
  ],
};
const configQuestion3 = {
  type: "doughnut",
  data: dataQuestion3,
  options: {
    plugins: {
      title: {
        display: true,
        text: dataQuestion3.datasets[0].label,
      },
      legend: {
        display: true,
        position: "bottom",
      },
    },
  },
};

var question3Chart = new Chart(
  document.getElementById("question3Chart"),
  configQuestion3
);
