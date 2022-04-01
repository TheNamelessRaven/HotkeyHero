using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class GameManager : MonoBehaviour
{
    // Start is called before the first frame update
    
    public AudioSource theMusic;
    public bool Play;
    public BeatScroller beatTempo;
    public static GameManager instance;

    public int Score;
    public int Hitscore = 100;

    public Text scoreText;
    public Text multi;

    public int currentMulti;
    public int multiTracer;
    public int[] multiTresholds;
    void Start()
    {
        instance = this;
        scoreText.text = "Score:0";
        currentMulti = 1;
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

        if (currentMulti - 1 < multiTresholds.Length)
        {
            multiTracer++;

            if (multiTresholds[currentMulti - 1] <= multiTracer)
            {
                currentMulti = 0;
                currentMulti++;
            }
            Score += Hitscore * currentMulti;
            multi.text = "Multiplier: " + currentMulti + "x";
            scoreText.text = "Score: " + Score;
        }
    }
    public void NoteMissed()
    {
        Debug.Log("Sikertelen :(");
        Score += Hitscore * currentMulti;
        multi.text = "Multiplier: " + currentMulti + "x";
        scoreText.text = "Score: " + Score;
        currentMulti = 1;
        multiTracer = 0;
    }
}