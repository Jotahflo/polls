const dataQuestion2 = {
  labels: labelsQuestion2Chart,
  datasets: [
    {
      label: "My First Dataset",
      data: dataQuestion2Chart,
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const configQuestion2 = {
  type: "doughnut",
  data: dataQuestion2,
  options: {},
};

var question2Chart = new Chart(
  document.getElementById("question2Chart"),
  configQuestion2
);
