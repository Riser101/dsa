#include <iostream>
using namespace std;

struct node{
    int data;
    node *next;
};

class list {
    private:
    node *head, *tail;
    
    public:
    list() {
        head=NULL;
        tail=NULL;
    }
    
    void createnode(int value) {
        node *temp = new node;    
        temp->data = value;
        temp->next = NULL;
        if(head==NULL) {
            head=temp;
            tail=temp;
            temp=NULL;
        } else {
            tail->next = temp;
            tail=temp;
        }// if ends
    }// createnode ends
    
    void display() {
        node *temp = new node;
        temp = head;
        while(temp!=NULL) {
            cout<<temp->data<<"\t";
            temp = temp->next;
        }// while ends
    }// display ends
    
    void insert_start(int value) {
        node *temp = new node;
        temp->data = value;
        temp->next = head;
        head = temp;
    }// insert_start ends
    
    void insert_position(int value, int pos) {
        node *temp = new node;
        node *cur = new node;
        node *pre = new node;
        cur = head;
        for(int i=1; i<pos; i++) {
            pre=cur;
            cur = cur->next;
        }// for ends
        temp->data = value;
        pre->next = temp;
        temp->next = cur;
    }// insert_position ends
    
    void delete_first() {
        node *temp = new node;
        temp = head;
        head = head->next;
        delete temp;
    }// delete_first ends
    
    void delete_last() {
        node *cur = new node;
        node *pre = new node;
        cur = head;
        while(cur->next!=NULL) {
            pre=cur;
            cur=cur->next;
        }// while ends
        pre->next = NULL;
        tail=pre;
        delete cur;
    }// delete_last ends
    
    void delete_position(int pos) {
        node *cur = new node;
        node *pre = new node;
        cur = head;
        for(int i=1; i<pos; i++) {
            pre=cur;
            cur = cur->next;
        }
        pre->next = cur->next;
    }// delete_position
    
};// class ends

int main() {
    list obj;
    obj.createnode(2);
    obj.createnode(3);
    obj.createnode(10);
    obj.insert_start(1);
    obj.insert_start(11);
    obj.insert_position(20, 3);
    obj.insert_position(50, 5);
    obj.delete_first();
    obj.delete_last();
    obj.delete_position(2);
    obj.display();
    return 0;
}