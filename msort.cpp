/**
 *  merge sort implementation
 *  dsa
 *
 *  input array (unsorted): 1    8    4    6    0    3    5    2    7    9
 *  output array (sorted) : 0    1    2    3    4    5    6    7    8    9
 *
 *  time complexity : O(nlogn)
 *
 *  Created by Yousuf Syed on 02/03/18.
 *  Copyright © 2018 Yousuf Syed. All rights reserved.
 */

#include<iostream>
#define MAX 10
using namespace std;

class msort{
private:
    int unsorted_array[MAX] = {1,8,4,6,0,3,5,2,7,9};
public:
    
    void merge_sort(int array[MAX]){
        if(sizeof(array) < 2){
            return;
        }
        
    }
    
    void merge(){
        
    }
    
    void display(){
        for(int i=0; i<MAX; i++){
            cout<<unsorted_array[i]<<"\t";
        }
        cout<<"\n";
    }
};

int main(){
    msort obj;
    obj.display();
    return 0;
}

