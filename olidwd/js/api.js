// Create a request variable and assign a new XMLHttpRequest object to it.
let request = new XMLHttpRequest();

// Open a new connection, using the GET request on the URL endpoint
request.open(
  'GET',
  'https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCiRgHJGPSMsMI3hcQKrm4yA&key=AIzaSyB40ms1q_iqgb5E7LUWk4GSIwpb5B3SKCs',
  true
);

request.onload = function() {
  // Begin accessing JSON data here
  let data = JSON.parse(this.response);

  console.log(data.items[0].statistics.viewCount);
  document.getElementById('views').innerText = data.items[0].statistics.viewCount;
  document.getElementById('subscribers').innerText = data.items[0].statistics.subscriberCount;
  document.getElementById('videos').innerText = data.items[0].statistics.videoCount;
};

// Send request
request.send();
