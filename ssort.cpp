/**
 *  selection sort implementation
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

class ssort{
private:
    int i,j,index_min, temp;
    int unsorted_array[MAX] = {1,8,4,6,0,3,5,2,7,9};
public:
    void selsort(){
        for(i=0; i<MAX-1; i++){
            index_min = i;
            for(j=i+1; j<MAX; j++){
                if(unsorted_array[j] < unsorted_array[index_min]) {
                    index_min = j;
                }
            }
            if(index_min != i){
                temp = unsorted_array[index_min];
                unsorted_array[index_min] = unsorted_array[i];
                unsorted_array[i] = temp;
            }
        }
    }
    void display(){
        for(int i=0; i<MAX; i++){
            cout<<unsorted_array[i]<<"\t";
        }
        cout<<"\n";
    }
};

int main(){
    ssort obj;
    obj.selsort();
    obj.display();
    return 0;
}
