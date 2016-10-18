import java.util.*;
import java.io.*;

class Book{
    String author,title,publisher;
    int id,numOfCopies;
    double price;
    Book(){
        System.out.println("Hello");
    }
    Book(String a,String b,String c,int d,int e,double f){
        this.author = a;
        this.title = b;
        this.publisher = c;
        this.id = d;
        this.numOfCopies = e;
        this.price = f;
    }
}

public class bookShop extends Book{
    public static void main(String args[]){
        int idToFind, copies;
        Scanner sc = new Scanner(System.in);
        bookShop bs = new bookShop();
        Book[] arr = new Book[3];
        arr[0] = new Book("Shubham","Chemistry","Pearson",123,2,105.25);
        arr[1] = new Book("Resnick","Physics","Wiley",124,1,105.25);
        arr[2] = new Book("Asit Das Gupta","Mathematics","Bharti",125,0,225);
        System.out.println("Enter the id of the book to find: ");
        idToFind = sc.nextInt();
        System.out.println("Enter the number of copies you want: ");
        copies = sc.nextInt();
        for(int i=0;i<3;i++){
            if(arr[i].id==idToFind && arr[i].numOfCopies>=copies){
                System.out.println("Yes the copies are available");
                System.out.println("The total cost is: "+ arr[i].price*copies);
            }
        }
    }
}