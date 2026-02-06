document.addEventListener('DOMContentLoaded', function(){
    // Code wordt uitgevoerd wanneer pagina is ingeladen
    sendUserData();
});



//  Functions
async function sendUserData(){

    //prep data
    var requestUrl = 'ajax/getSingleBook.php';
    var payload = {
        bookId: 1,
    };

    //recommended -> check if user data checks out
    // if(!payload.username || payload.age <= 10){
    //     throw new Error('invalid input');
    // }

    // Do AJAX request - call PHP
    try{
        
        var res = await fetch(requestUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(payload),
        });

        // process data/resource send by PHP (res)
        // read raw text first (important)
        var text = await res.text();
        var data;

        console.log('status:', res.status);
        console.log('Raw response:', text);

        try{
            data = JSON.parse(text);
            // take "text" and put it so it gets displayed in html
            


        }catch{
            throw new Error('Invalid JSON from server');
        }

        if(!res.ok){
            //server-defined error (comes from requestUrl)
            throw new Error(data.error || 'request failed');
        }

        console.log('Succes:', data);

        return data;

    }catch(err){
        console.log('Request error:', err.message);
        //surface this to UI
        throw err;
    }
}


