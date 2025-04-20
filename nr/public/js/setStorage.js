class LocalStorageSet {
    static localStorageSetString(key, value) {
      localStorage.setItem(key, value);
    }
  
    static localStorageSetJson(key, value) {
      localStorage.setItem(key, JSON.stringify(value));
    }
  
  
    static localStorageRemove(token){
      localStorage.removeItem(token)
    }
  }