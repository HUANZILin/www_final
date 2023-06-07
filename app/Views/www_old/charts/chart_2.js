const ct_2 = document.getElementById("chart_2");

const config_2 = {
  type: "doughnut",
  data: {
    labels: ["時事", "娛樂", "美食"],
    datasets: [
      {
        label: "點閱數",
        data: [20, 10, 30],
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

new Chart(ct_2, config_2);
