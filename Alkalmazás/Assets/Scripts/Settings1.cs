using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Settings1 : MonoBehaviour
{
    AudioSource theMusic;
    int soundv = 100;
    void Resolution ()
    {

    }
    void Sound()
    {
        theMusic.volume = soundv;
    }
    void Update()
    {
        soundv = 0 + soundv;   
    }
}
