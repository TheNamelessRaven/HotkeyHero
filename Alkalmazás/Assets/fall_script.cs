using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class fall_script : MonoBehaviour
{
    // Start is called before the first frame update
    public float beatTempo;
    public bool hasStarted;
    
    void Start()
    {
        
    }
    // Update is called once per frame
    void Update()
    {
        if (Input.anyKeyDown)
        {
            hasStarted = true;
        }
        else
        {
            transform.position -= new Vector3(0f, beatTempo * Time.deltaTime, 0f);
        }
    }
}
