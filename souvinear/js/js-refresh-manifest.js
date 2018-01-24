window.addEventListener('load', function(e) {
  if (window.applicationCache) {
    window.applicationCache.addEventListener('updateready', function(e) {
        if (window.applicationCache.status == window.applicationCache.UPDATEREADY) {
          // Browser downloaded a new app cache.
          // Swap it in and reload the page to get the new hotness.
          window.applicationCache.swapCache();
          if (confirm('Updates are available for this mobile web app. Load them?')) {
            window.location.reload();
          }
        } else {
          // Manifest didn't changed. Nothing new to server.
        }
    }, false);
  }
}, false);
