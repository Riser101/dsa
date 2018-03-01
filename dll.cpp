#include<iostream>
namespace std;

struct node{
  int data;
  node *next;
  node *prev;
};

class list{
  private:
  node *head, *tail;
  
  public:
  list(){
      head = NULL;
      tail = NULL;
  }
  
  void createnode(int value){
    node *temp = new node;
    temp->data = value;
    temp->next = NULL;
    temp->prev = NULL;
    if(head == NULL){
        head = temp;
        tail = temp;
        temp = NULL;
    } else {
        temp->next = head;
        head->prev = temp;
        head = temp;
    }
  }// createnode ends
};