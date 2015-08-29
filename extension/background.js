chrome.app.runtime.onLaunched.addListener(function() {
  chrome.app.window.create('homepage.html', {
    'bounds': {
      'width': 540,
      'height': 300
    }
  });
});