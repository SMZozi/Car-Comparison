package com.example.student.carcomparisonapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class userMainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_user_main);

        Button addVehicle = (Button) findViewById(R.id.btnAddVehicle);
        Button view = (Button) findViewById(R.id.btnViewVehicle);
        addVehicle.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent addPage = new Intent(getApplicationContext(), addVehicle.class);
                startActivity(addPage);
            }
        });

        view.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent viewPage = new Intent(getApplicationContext(), viewVehicle.class);
                startActivity(viewPage);
            }
        });


    }
}
