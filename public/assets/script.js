const mySpinValues = [
    { minDegree: 61, maxDegree: 90, value: 100 },
    { minDegree: 31, maxDegree: 60, value: 200 },
    { minDegree: 0, maxDegree: 30, value: 300 },
    { minDegree: 331, maxDegree: 360, value: 400 },
    { minDegree: 301, maxDegree: 330, value: 500 },
    { minDegree: 271, maxDegree: 300, value: 600 },
    { minDegree: 241, maxDegree: 270, value: 700 },
    { minDegree: 211, maxDegree: 240, value: 800 },
    { minDegree: 181, maxDegree: 210, value: 900 },
    { minDegree: 151, maxDegree: 180, value: 1000 },
    { minDegree: 121, maxDegree: 150, value: 1100 },
    { minDegree: 91, maxDegree: 120, value: 1200 },
  ];

  const mySize = [15, 20, 10, 15, 10, 25, 15, 10, 20, 15, 10, 20]; // Customize the size of each sector
  const mySpinColors = [
    "#3498db",
    "#e74c3c",
    "#27ae60",
    "#f39c12",
    "#2c3e50",
    "#9b59b6",
    "#e67e22",
    "#3498db",
    "#2ecc71",
    "#e74c3c",
    "#1abc9c",
    "#f39c12",
  ]; // Customize the colors of each sector

  let mySpinChart = new Chart(document.getElementById("spinWheel"), {
    plugins: [ChartDataLabels],
    type: "pie",
    data: {
      labels: ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L"],
      datasets: [
        {
          backgroundColor: mySpinColors,
          data: mySize,
        },
      ],
    },
    options: {
      responsive: true,
      animation: { duration: 0 },
      plugins: {
        tooltip: false,
        legend: {
          display: false,
        },
        datalabels: {
          rotation: 90,
          color: "#ffffff",
          formatter: (_, context) => context.chart.data.labels[context.dataIndex],
          font: { size: 24 },
        },
      },
    },
  });

  const generateValue = (angleValue) => {
    for (let i of mySpinValues) {
      if (angleValue >= i.minDegree && angleValue <= i.maxDegree) {
        let winningAmount = i.value;

        // Display winning message
        document.getElementById("text").innerHTML = `<p>Congratulations, You Have Won ${winningAmount} ! </p>`;

        // Send AJAX request to Laravel controller
        sendWinningRequest(winningAmount);

        break;
      }
    }
  };


  const sendWinningRequest = (winningAmount) => {
  // Make an AJAX request to Laravel controller
  // Modify the URL and data according to your Laravel route and controller logic
  $.ajax({
    url: '/User/spin-wheel', // Replace this with your Laravel route URL
    type: 'POST',
    data: {
      amount: winningAmount,
      _token: $('meta[name="csrf-token"]').attr('content'), // Add CSRF token in data
    },
    success: function (response) {
      // Handle the success response if needed
      console.log('Request sent successfully');
      // Redirect to user dashboard after 2 seconds
      setTimeout(() => {
        window.location.href = '/User/Dashboard'; // Replace with your actual dashboard URL
      }, 2000);
    },
    error: function (error) {
      // Handle the error response if needed
      console.error('Error sending request', error);
    },
  });
};


  document.getElementById("spin_btn").addEventListener("click", () => {
    document.getElementById("spin_btn").disabled = true;
    document.getElementById("text").innerHTML = `<p>Best Of Luck!</p>`;

    let randomDegree = Math.floor(Math.random() * (355 - 0 + 1) + 0);
    let startTime = new Date().getTime();

    function spinWheel() {
      let currentTime = new Date().getTime();
      let elapsedTime = currentTime - startTime;

      if (elapsedTime < 5000) {
        // Spin the wheel
        mySpinChart.options.rotation += 3; // Adjust the rotation speed as needed
        mySpinChart.update();
        requestAnimationFrame(spinWheel);
      } else {
        // Stop spinning after 5 seconds
        generateValue(randomDegree);
        document.getElementById("spin_btn").disabled = false;
      }
    }
    spinWheel();
  });
