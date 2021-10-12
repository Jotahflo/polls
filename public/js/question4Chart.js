const dataQuestion4 = {
  labels: labelsQuestion4Chart,
  datasets: [
    {
      label: "Cantidad de personas, segun horas de hobby",
      data: dataQuestion4Chart,
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const configQuestion4 = {
  type: "doughnut",
  data: dataQuestion4,
  options: {},
};

var question4Chart = new Chart(
  document.getElementById("question4Chart"),
  configQuestion4
);
