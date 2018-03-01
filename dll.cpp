#include<iostream>
using namespace std;

struct node{
    int data;
    node *next;
    node *prev;
};

class dlist{
private:
    node *head, *tail;
public:
    dlist(){
        head = NULL;
        tail = NULL;
    }
    void insert_first(int value){
        node *temp = new node;
        temp->data = value;
        if(head == NULL){
            temp->next = NULL;
            temp->prev = NULL;
            head = temp;
        } else {
            temp->next = head;
            head->prev = temp;
            temp->prev = NULL;
            head = temp;
        }// if/else ends
    }// insert_first ends
    
    void insert_last(int value){
        node *temp = new node;
        temp->data = value;
        if(head == NULL){
            temp->next = NULL;
            temp->prev = NULL;
            head = temp;
            tail = temp;
        } else {
            temp->prev = tail;
            temp->next = NULL;
            tail->next = temp;
            tail = temp;
        }
    }
    
    void insert_position(int value, int pos){
        node *temp = new node;
        node *cur_node = new node;
        node *prev_node = new node;
        temp->data = value;
        cur_node = head;
        for(int i=1; i<pos; i++){
            prev_node = cur_node;
            cur_node = cur_node->next;
        }
        prev_node->next = temp;
        temp->prev = prev_node;
        temp->next = cur_node;
        cur_node->prev = temp;
    }
    
    void display(){
        node *temp = new node;
        temp = head;
        while(temp!=NULL){
            cout<<temp->data<<"\t";
            temp = temp->next;
        }// while ends
    }// display
    
    void delete_first(){
        node *temp = new node;
        temp = head;
        head = head->next;
        head->prev = NULL;
        delete temp;
    }
    
    void delete_last(){
        node *temp = new node;
        temp = tail;
        tail = tail->prev;
        tail->next = NULL;
        delete temp;
    }
    
    void delete_position(int pos){
        node *cur_node = new node;
        node *temp = new node;
        node *prev_node = new node;
        cur_node = head;
        for(int i=1; i<pos; i++){
            cur_node = cur_node->next;
        }
        temp = cur_node;
        prev_node = cur_node->prev;
        prev_node->next = cur_node->next;
        cur_node->prev = prev_node;
        delete temp;
    }
    
};// dlist ends

int main(){
    dlist obj;
    
    obj.insert_last(1);
    obj.insert_last(2);
    obj.insert_last(3);
    obj.insert_last(4);
    obj.insert_last(5);
    obj.insert_last(6);
    obj.delete_first();
    obj.delete_last();
    obj.insert_position(1,3);
    obj.delete_position(4);
    obj.delete_position(2);
    obj.insert_first(2);
    obj.insert_first(4);
    obj.insert_first(12);
    obj.insert_first(10);
    obj.delete_first();
    obj.display();
}
