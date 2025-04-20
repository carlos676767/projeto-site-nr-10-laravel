class RedirectHandler {
    static redirectPageNext(url) {
      return (location.href = url);
    }
  
    static redictPageInTimeDefined(url, time) {
      return setTimeout(() => {
        location.href = url;
      }, time);
    }
  }