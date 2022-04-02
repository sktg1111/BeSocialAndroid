package com.example.besocial;
public class AdapterItems {
    public   String post_id;
    public  String post_text;
    public  String post_picture;
    public  String post_date;
    public  String user_id;
    public  String first_name;
    public  String picture_path;
    //for news details
    AdapterItems(  String post_id,  String post_text,String post_picture,
                   String post_date,String user_id,String first_name ,String picture_path)
    {
        this.post_id=post_id;
        this.post_text=post_text;
        this.post_picture=post_picture;
        this.user_id=user_id;
        this.first_name=first_name;
        this.picture_path=picture_path;
        this.post_date=post_date;
    }
}
