package com.example.student.carcomparisonapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class loginActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login2);

        final DataBaseHandler db = new DataBaseHandler(this);
        final EditText edtUsername = (EditText) findViewById(R.id.edtUsername);
        final EditText edtPassword = (EditText) findViewById(R.id.edtPassword);

        Button btnLogIn = (Button) findViewById(R.id.btnSignin);

        btnLogIn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                String username = edtUsername.getText().toString();
                String password = edtPassword.getText().toString();

                if (username.equals("")  || password.equals("") ) {
                    Toast.makeText(getApplicationContext(), "please provide username or password ", Toast.LENGTH_SHORT).show();
                } else {
                    try {
                        User user = db.getUser(username);
                        String uName = user.getUsername();
                        String name = user.getName();
                        String surname = user.getSurname();
                        String pWord = user.getPassword();
//                    Intent startIntent = new Intent(getApplicationContext(), AddBookingActivity.class);
//                    startIntent.putExtra("com.example.student.carwashapp.SURNAME",name);
//                    startIntent.putExtra("com.example.student.carwashapp.INITIALS",init);
//                    startIntent.putExtra("com.example.student.carwashapp.REGNO",regno);
//                    startActivity(startIntent);

                        if (username.equals(uName) && password.equals(pWord)) {
                            Toast.makeText(getApplicationContext(), "welcome to " + username, Toast.LENGTH_SHORT).show();
                            Intent userMain = new Intent(getApplicationContext(), userMainActivity.class);

                            startActivity(userMain);
                        }
                        else
                        {
                            Toast.makeText(getApplicationContext(), "Wrong username or password", Toast.LENGTH_SHORT).show();

                        }


                    } catch (Exception ex) {
                        Toast.makeText(getApplicationContext(), "Something went wrong Cant find the user please register if you never been registered to the system" , Toast.LENGTH_SHORT).show();
                    }


                }
            }
        });

        Button  btnRegister = (Button) findViewById(R.id.btnRegister);

        btnRegister.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent registerIntent = new Intent(getApplicationContext(), registerActivity.class);

                startActivity(registerIntent);


            }
        });
    }


}
