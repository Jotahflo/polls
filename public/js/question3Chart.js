const dataQuestion3 = {
  labels: labelsQuestion3Chart,
  datasets: [
    {
      label: "My First Dataset",
      data: dataQuestion3Chart,
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const configQuestion3 = {
  type: "doughnut",
  data: dataQuestion3,
  options: {},
};

var question3Chart = new Chart(
  document.getElementById("question3Chart"),
  configQuestion3
);
