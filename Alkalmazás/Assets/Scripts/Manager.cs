using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Manager : MonoBehaviour
{
    public AudioSource music;
    public bool start;
    public falldown bt;
    public static Manager instance;
    void Start()
    {
        instance = this;
    }

    // Update is called once per frame
    void Update()
    {
       
    }

    public void hitNote()
    {
        Debug.Log("Hit on time");
    }
    public void missNote()
    {
        Debug.Log("Missed");
    }
}
