class GetLocalStorage {
    static getStorage(key) {
      return localStorage.getItem(key);
    }
  
    static getLocalStorageObject(key) {
      const stringValue = localStorage.getItem(key);
      return JSON.parse(stringValue);
    }
  }