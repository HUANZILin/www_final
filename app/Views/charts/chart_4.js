const ct_4 = document.getElementById("chart_4");

const config_4 = {
  type: "line",
  data: {
    labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
    datasets: [
      {
        label: "影片量",
        data: [5, 3, 4, 3, 1, 2, 4],
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

new Chart(ct_4, config_4);
