/**
 *  bsort implementation
 *  dsa
 *
 *  input array (unsorted): 1    8    4    6    0    3    5    2    7    9
 *  output array (sorted) : 0    1    2    3    4    5    6    7    8    9
 *
 *  time complexity : O(n^2)
 *
 *  Created by Yousuf Syed on 02/03/18.
 *  Copyright © 2018 Yousuf Syed. All rights reserved.
 */

#include<iostream>
#define MAX 10
using namespace std;

class bsort{
    
private:
    int input_array[MAX] = {1,8,4,6,0,3,5,2,7,9};
    bool swapped;
    int temp;
    
public:
    
    void bubblesort(){
        for(int j=0; j<MAX-1; j++){
            swapped = false;
            /** loops input_array : basically makes 9 comparisons. 1st two then compares (2nd & 3rd), and so on.
              * i.e loop must run 9 rounds
              * i<MAX-1-j, because on every iteration largest number accumulates to the rightmost of the array
              * subtracting j, helps us reduce those comparisons at the end of the array
              */
            for(int i=0; i<MAX-1-j; i++){
                if(input_array[i] > input_array[i+1]){
                    temp = input_array[i+1];
                    input_array[i+1] = input_array[i];
                    input_array[i] = temp;
                }
                swapped = true;
            }
            // breaks out when the array is completely sorted
            if(swapped == false) {
                break;
            }
        }
    }
    
    void display(){
        for(int i=0; i<MAX; i++){
            cout<<input_array[i]<<"\t";
        }
        cout<<"\n";
    }
};

int main(){
    bsort obj;
    obj.bubblesort();
    obj.display();
    return 0;
}

