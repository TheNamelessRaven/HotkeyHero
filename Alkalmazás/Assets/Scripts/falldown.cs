using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class falldown : MonoBehaviour
{
    public bool Started;
    public float beatTempo;
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        if (!Started)
        {
            if (Input.anyKeyDown)
            {
                Started = true;
            }
            
        }
        else
        {
            transform.position -= new Vector3(0f, beatTempo * Time.deltaTime, 0f);
        }
    }
}
