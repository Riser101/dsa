#include<iostream>
using namespace std;
class msort{
public:
    int arr[3] = {3,2,1};
    void sort(int low, int high){
        if(low == high){
            return;
        }
        int mid = (low+high)/2;
        cout<<"mid= "<<mid;
        sort(low, mid);
    }
};

int main(){
    msort obj;
    obj.sort(0, 2);
}
