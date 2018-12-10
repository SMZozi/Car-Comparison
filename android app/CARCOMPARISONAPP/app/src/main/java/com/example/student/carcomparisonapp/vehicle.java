package com.example.student.carcomparisonapp;

public class vehicle
{
    public String make;
    public String model;
    public String price;
    public String colour;

    public vehicle(String mk, String md, String pr, String cl)
    {
        make = mk;
        model = md;
        price = pr;
        colour = cl;
    }

    public void setMake(String make)
    {
        this.make = make;
    }

    public void setModel(String model)
    {
        this.model = model;
    }

    public void setPrice(String price)
    {
        this.price = price;
    }

    public void setColour(String colour)
    {
        this.colour = colour;
    }

    public String getMake()
    {
        return make;
    }

    public String getModel()
    {
        return model;
    }

    public String getPrice()
    {
        return price;
    }

    public String getColour()
    {
        return colour;
    }
}
