package com.example.student.carcomparisonapp;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class DataBaseHandler extends SQLiteOpenHelper
{

    private static final int DATABASE_VERSION = 1;
    private static final String DATABASE_NAME = "carComparison";
    private static final String TABLE_USER = "user";
    private static final String USER_NAME = "username";
    private static final String PASS_WORD = "password";
    private static final String F_NAME = "fname";
    private static final String SURNAME = "surname";


    private static final String TABLE_VEHICLE = "vehicle";
    private static final String MAKE = "make";
    private static final String MODEL = "model";
    private static final String PRICE = "price";
    private static final String COLOUR = "colour";
    public DataBaseHandler(Context context)
    {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);

    }

    @Override
    public void onCreate(SQLiteDatabase db)
    {
        String CREATE_USER_TABLE = "CREATE TABLE " + TABLE_USER + "("
                + USER_NAME + " TEXT PRIMARY KEY," + PASS_WORD + " TEXT," + F_NAME +" TEXT,"+ SURNAME +" TEXT"+")";

                 db.execSQL(CREATE_USER_TABLE);

                 String CREATE_VEHICLE_TABLE = "CREATE TABLE "+ TABLE_VEHICLE +" (" + MAKE + " TEXT, " + MODEL +" TEXT, " +
                         PRICE + " TEXT," + COLOUR + "TEXT )";
        db.execSQL(CREATE_VEHICLE_TABLE);

    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion)
    {
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_USER);
        onCreate(db);

        db.execSQL("DROP TABLE IF EXISTS " + TABLE_VEHICLE);
        onCreate(db);
    }

    void addUser(User user)
    {
        SQLiteDatabase db = this.getWritableDatabase();

        ContentValues values = new ContentValues();
        values.put(USER_NAME,user.getUsername());
        values.put(PASS_WORD,user.getPassword());
        values.put(F_NAME,user.getName());
        values.put(SURNAME,user.getSurname());
        db.insert(TABLE_USER,null,values);
        //insert
        db.close();

    }

    void addVehicle(vehicle Veh)
    {
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues values =  new ContentValues();
        values.put(MAKE, Veh.getMake());
        values.put(MODEL, Veh.getModel());
        values.put(PRICE, Veh.getPrice());
        values.put(COLOUR, Veh.getColour());

        db.insert(TABLE_VEHICLE, null, values);
        db.close();
    }
    User getUser(String id)

    {
        SQLiteDatabase db = this.getReadableDatabase();
        Cursor cursor = db.query(TABLE_USER, new String[]{USER_NAME,PASS_WORD, F_NAME, SURNAME},USER_NAME+"=?",new String[]{String.valueOf(id)},null,null,null,null);
        User user;
        if(cursor!=null )
        {
            cursor.moveToFirst();
            String uName = cursor.getString(0);
            String pWord = cursor.getString(1);
            String name = cursor.getString(2);
            String surname = cursor.getString(3);

            user = new User(uName,pWord, name, surname);

        }
        else
        {
            user = new User("default","deaultNumber", "defaultName", "defaultSurname");

        }
        return user;

    }

    vehicle getVehicle()
    {
        SQLiteDatabase db = this.getReadableDatabase();
        Cursor cursor = db.query(TABLE_VEHICLE, new String[]{MAKE, MODEL, PRICE, COLOUR},MAKE+"=?",null, null, null, null, null);
        vehicle Veh;
        if(cursor!=null)
        {
            cursor.moveToFirst();
            String mk = cursor.getString(0);
            String md =  cursor.getString(1);
            String pr = cursor.getString(2);
            String cl = cursor.getString(3);

            Veh = new vehicle(mk, md, pr, cl);
        }
        else
        {
            Veh = new vehicle("","","","");
        }

        return Veh;
    }
}
