var backgroundColorChart4 = [];

var dynamicColors = function() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return "rgb(" + r + "," + g + "," + b + ")";
};

for (let i = 0; i < dataQuestion4Chart.length; i++) {
  backgroundColorChart4.push(dynamicColors());
}

const dataQuestion4 = {
  labels: labelsQuestion4Chart,
  datasets: [
    {
      label: "Las mayores horas gastadas en hobbys",
      data: dataQuestion4Chart,
      backgroundColor: backgroundColorChart4,
      hoverOffset: 4,
    },
  ],
};
const configQuestion4 = {
  type: "doughnut",
  data: dataQuestion4,
  options: {
    plugins: {
      title: {
        display: true,
        text: dataQuestion4.datasets[0].label,
      },
      legend: {
        display: true,
        position: "bottom",
      },
    },
  },
};

var question4Chart = new Chart(
  document.getElementById("question4Chart"),
  configQuestion4
);
