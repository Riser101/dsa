    //
    //  queue array implementation
    //  dsa
    //
    //  Created by Yousuf Syed on 02/03/18.
    //  Copyright © 2018 Yousuf Syed. All rights reserved.
    //

#include<iostream>
#define MAX 6
using namespace std;

class Q{
private:
    int data_array[MAX];
    int rear = -1;
    int front = 0;
    int item_count = 0;
    
public:
    bool is_empty(){
        return item_count == 0;
    }
    
    bool is_full(){
        return item_count == MAX;
    }
    
    void enqueue(int value){
        if(!is_full()){
            data_array[++rear] = value;
            item_count++;
        }
    }
    
    void display(){
        cout<<"<-- exit_point"<<"\t"<<"entry_point -->"<<"\n";
        for(int i=0; i<item_count; i++){
            cout<<data_array[i]<<"\t";
        }
        cout<<"\n";
    }
    
    void dequeue(){
        if(!is_empty()){
            for(int i=0; i<item_count; i++){
                data_array[i] = data_array[i+1];
            }
            item_count--;
            rear--;
        }
    }
};


int main(){
    Q obj;
    obj.enqueue(2);
    obj.enqueue(3);
    obj.enqueue(10);
    obj.dequeue();
    obj.enqueue(12);
    obj.enqueue(13);
    obj.enqueue(14);
    obj.dequeue();
    obj.display();
}
