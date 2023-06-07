const ct_3 = document.getElementById("chart_3");

const config_3 = {
  type: "line",
  data: {
    labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
    datasets: [
      {
        label: "單字量",
        data: [65, 54, 41, 39, 27, 47, 53],
        fill: false,
        borderColor: "#314543",
        pointBackgroundColor: "#314543",
        tension: 0.1,
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

new Chart(ct_3, config_3);
