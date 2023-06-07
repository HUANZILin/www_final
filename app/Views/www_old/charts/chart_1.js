const ct = document.getElementById("chart_1");

const config = {
  type: "doughnut",
  data: {
    labels: ["時事", "娛樂", "美食"],
    datasets: [
      {
        label: "點閱數",
        data: [30, 10, 20],
        borderWidth: "0",
        backgroundColor: ["#314543", "#58805e", "#af7a1f"],
        hoverOffset: 4,
      },
    ],
  },
  options: {
    plugins: {
      legend: {
        labels: {
          // This more specific font property overrides the global property
          font: {
            size: 16,
            family: "微軟正黑體",
          },
          color: "#314543",
        },
      },
    },
  },
};

new Chart(ct, config);
