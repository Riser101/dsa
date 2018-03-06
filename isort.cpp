/**
 *  isort implementation
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

class isort{
private:
    int value_to_insert;
    int hole_position;
    int unsorted_array[MAX] = {1,8,4,6,0,3,5,2,7,9};
public:
    void insertion_sort(){
        for(int i=1; i<MAX; i++){
            hole_position = i;
            value_to_insert = unsorted_array[i];
            while(hole_position > 0 && unsorted_array[hole_position-1] > value_to_insert){
                unsorted_array[hole_position] = unsorted_array[hole_position-1];
                hole_position--;
            }
            if(hole_position != i){
                unsorted_array[hole_position] = value_to_insert;
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
    isort obj;
    obj.insertion_sort();
    obj.display();
}
