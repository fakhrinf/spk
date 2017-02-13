package com.example.rika.spk;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.support.v7.widget.Toolbar;


public class MainActivity extends AppCompatActivity {


    private Toolbar toolbar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);
    }
    public void klikspk(View v){
        startActivity(new Intent(MainActivity.this,spk.class ));
    }
    public void klikjenis(View v){
        startActivity(new Intent(MainActivity.this,jenis_ikan.class ));
        }
    public void klikbobot(View v){
        startActivity(new Intent(MainActivity.this,lihat_bobot.class ));
    }
    public void klikadmin(View v){
        startActivity(new Intent(MainActivity.this,admin.class ));
    }


}
