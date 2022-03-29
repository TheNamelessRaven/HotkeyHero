using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GameManager : MonoBehaviour
{
    // Start is called before the first frame update

    public AudioSource theMusic;
    public bool Play;
    public BeatScroller beatTempo;
    public static GameManager instance;
    void Start()
    {
        instance = this;
    }

    // Update is called once per frame
    void Update()
    {
        if (!Play)
        {
            if (Input.anyKeyDown)
            {
                Play = true;
                beatTempo.Started = true;
                theMusic.Play();
            }

        }
    }

    public void NoteHit()
    {
        Debug.Log("Siker!");
    }
    public void NoteMissed()
    {
        Debug.Log("Sikertelen :(");
    }
}