




(async() => {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    await fetch(`http://localhost:8000/getUserTk`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json' ,
          'X-CSRF-TOKEN': csrfToken 
        },
        body: JSON.stringify({token:localStorage.getItem(`tkUser`)})
    })
})()