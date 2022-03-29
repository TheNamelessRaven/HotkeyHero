using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class BeatScroller : MonoBehaviour
{
    public float beatTempo;
    public bool Started;

    void Start()
    {
        beatTempo = beatTempo / 60f;
    }

    // Update is called once per frame
    void Update()
    {
        if (!Started)
        {
            //Started = true;
            Debug.Log("Nyomj egy gombot!");
        }
        else
        {
            transform.position -= new Vector3(0f, Time.deltaTime, 0f);
        }
    }
}
