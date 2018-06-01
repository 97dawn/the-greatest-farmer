function search(){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../app/renderSubs.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    // Join data
    var cropType =  document.getElementById("cropType");
    var cropName =  document.getElementById("cropName");
    var priceRange =  document.getElementById("priceRange");
    cropType = cropType.value;
    cropName = cropName.value;
    priceRange = priceRange.value;
    var minPrice = 0;
    var maxPrice = -1;
    if(priceRange.includes("-")){
        priceRange = priceRange.split("-");
        minPrice = parseInt(priceRange[0]);
        maxPrice = parseInt(priceRange[1]);
    }
    else{
        if(priceRange.includes("below")){
            priceRange = priceRange.split(" ");
            maxPrice = parseInt(priceRange[1]);
        }
        else if(priceRange.includes("above")){
            priceRange = priceRange.split(" ");
            minPrice = parseInt(priceRange[0]);
        }
        else{
            minPrice = -1;
        }
    }
    var data = JSON.stringify({"cropType":cropType,"cropName":cropName,"minPrice":minPrice,"maxPrice":maxPrice});
    xhr.onreadystatechange = function (){
        if(xhr.readyState === 4 && xhr.status === 200){
            var json = JSON.parse(xhr.responseText);
            var subs = document.getElementById("subs");
            // render subscriptions
        }
    }
    xhr.send("data="+data);
}