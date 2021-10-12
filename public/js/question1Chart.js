const dataQuestion1 = {
  labels: labelsQuestion1Chart,
  datasets: [
    {
      label: "Cantidad de personas, segun nombre",
      data: dataQuestion1Chart,
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
      ],
      hoverOffset: 4,
    },
  ],
};
const configQuestion1 = {
  type: "doughnut",
  data: dataQuestion1,
  options: {},
};

var question1Chart = new Chart(
  document.getElementById("question1Chart"),
  configQuestion1
);
