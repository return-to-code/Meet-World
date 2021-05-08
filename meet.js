// replace these values with those generated in your TokBox Account
var apiKey = "47223514";
var sessionId = "1_MX40NzIyMzUxNH5-MTYyMDQ4MjE3MDc0N35pWGVLZUJsWkpQWDdqUkJ6aExiRm1nWXZ-fg";
var token = "T1==cGFydG5lcl9pZD00NzIyMzUxNCZzaWc9NDc0MWVjMzQyN2VmOWZkNjJkNmExNjkwMmI2ZmJiYTZjN2M1NWZlNzpzZXNzaW9uX2lkPTFfTVg0ME56SXlNelV4Tkg1LU1UWXlNRFE0TWpFM01EYzBOMzVwV0dWTFpVSnNXa3BRV0RkcVVrSjZhRXhpUm0xbldYWi1mZyZjcmVhdGVfdGltZT0xNjIwNDgyNDUyJm5vbmNlPTAuNjk0MDkzODUwNTUzNzkyNCZyb2xlPXB1Ymxpc2hlciZleHBpcmVfdGltZT0xNjIzMDc0NDUxJmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9";

// (optional) add server code here
initializeSession();
// Handling all of our errors here by alerting them
function handleError(error) {
  if (error) {
    alert(error.message);
  }
}

function initializeSession() {
  var session = OT.initSession(apiKey, sessionId);

  // Subscribe to a newly created stream
session.on('streamCreated', function(event) {
  session.subscribe(event.stream, 'subscriber', {
    insertMode: 'append',
    width: '100%',
    height: '100%'
  }, handleError);
});
  // Create a publisher
  var publisher = OT.initPublisher('publisher', {
    insertMode: 'append',
    width: '100%',
    height: '100%'
  }, handleError);

  // Connect to the session
  session.connect(token, function(error) {
    // If the connection is successful, publish to the session
    if (error) {
      handleError(error);
    } else {
      session.publish(publisher, handleError);
    }
  });
}
