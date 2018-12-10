package com.example.student.carcomparisonapp;

public class User
{
    String username;
    String password;
    String name;
    String surname;

    public User(String user_name, String pass_word)
    {
        this.username = user_name;
        this.password = pass_word;
    }

    public User(String user_name, String pass_word, String fName, String sur_name)
    {
        this.username = user_name;
        this.password = pass_word;
        this.name = fName;
        this.surname = sur_name;
    }

    public void setUsername(String user_name)
    {
        this.username = user_name;
    }

    public  void setPassword (String pass_word)
    {
        this.password = pass_word;
    }

    public void setName(String fName)
    {
        this.name = fName;
    }

    public void setSurname(String sur_name)
    {
        this.surname = sur_name;
    }

    public String getPassword() {
        return password;
    }

    public  String getUsername()
    {
        return username;
    }

    public String getName()
    {
        return name;
    }

    public String getSurname()
    {
        return surname;
    }
}
