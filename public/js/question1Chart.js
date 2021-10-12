var backgroundColorChart1 = [];

var dynamicColors = function() {
  var r = Math.floor(Math.random() * 255);
  var g = Math.floor(Math.random() * 255);
  var b = Math.floor(Math.random() * 255);
  return "rgb(" + r + "," + g + "," + b + ")";
};

for (let i = 0; i < dataQuestion1Chart.length; i++) {
  backgroundColorChart1.push(dynamicColors());
}

const dataQuestion1 = {
  labels: labelsQuestion1Chart,
  datasets: [
    {
      label: "Las personas que más contestaron",
      data: dataQuestion1Chart,
      backgroundColor: backgroundColorChart1,
      hoverOffset: 4,
    },
  ],
};
const configQuestion1 = {
  type: "doughnut",
  data: dataQuestion1,
  options: {
    plugins: {
      title: {
        display: true,
        text: dataQuestion1.datasets[0].label,
      },
      legend: {
        display: true,
        position: "bottom",
      },
    },
  },
};

var question1Chart = new Chart(
  document.getElementById("question1Chart"),
  configQuestion1
);
