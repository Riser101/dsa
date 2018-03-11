  var i = 0;
  var j = 0;
  var k = 0;

function merge(left, right, array){
  var left_len = left.length;
  var right_len = right.length;
  
  while(i<left_len && j<right_len){
    if(left[i]<=right[j]){
      array[k] = left[i];
      i = i+1;
      k=k+1;
    }else{
      array[k] = right[j];
      j=j+1;
      k=k+1;
    }
  }
  
  while(i<left_len){
    array[k] = left[i];
    k=k+1;
    i=i+1;
  }
  
  while(j<right_len){
    array[k] = right[j];
    j=j+1;
    k=k+1;
  }
  
}

function mergeSort(array){

    var n = array.length;
    
    if(n < 2){ 
      return array; 
    }
    var mid = Math.floor(n/2);
    var left = new Array(mid);
    var right = new Array(n-mid);

    for(var i=0; i<mid-1; i++){
      left[i] = array[i];  
    }

    for(var j=mid; j<n-1;j++){
      right[j-mid] = array[j];
    }
    mergeSort(left);
    mergeSort(right);
    //call merge function
    merge(left, right, array);
}

var arr = [1,8,4,6,0,3,5,2,7,9];

// var result = new Array(10);
mergeSort(arr);
console.log(arr);

