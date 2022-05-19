function loaddata(name)
{
  
    if(name =="Dhealth")
    {
        document.getElementById("para").innerHTML = "Dog health is viewed holistically; it encompasses many different aspects, including disease processes, genetics, and nutritional health, for example. Infectious diseases that affect dogs are important not only from a veterinary standpoint, but also because of the risk to public health; an example of this is rabies. Genetic disorders also affect dogs, often due to selective breeding to produce individual dog breeds. Due to the popularity of both commercial and homemade dog foods, nutrition is also a heavily studied subject.";
        document.getElementById("image1").src = "../images/Pet advice/1.jpg.jpg ";
    }
   else if(name =="Dlifestyle")
    {
         document.getElementById("para").innerHTML = "Dog behavior is the internally coordinated responses of individuals or groups of domestic dogs to internal and external stimuli.[1] It has been shaped by millennia of contact with humans and their lifestyles. As a result of this physical and social evolution, dogs, more than any other species, have acquired the ability to understand and communicate with humans, and they are uniquely attuned in these fellow mammals.[2] Behavioral scientists have uncovered a wide range of social-cognitive abilities in the domestic dog.";
        document.getElementById("image1").src = "../images/Pet advice/2.jpg.jpeg ";
    }
   else if(name =="Dstress")
    {
        document.getElementById("para").innerHTML = "Separation anxiety in dogs describes a condition in which a dog exhibits distress and behavior problems when separated from its handler. Separation anxiety typically manifests within minutes of departure of the handler.[1] It is not fully understood why some dogs suffer from separation anxiety and others do not.[2] The diagnosis process often leads to a misdiagnosis as it difficult to differentiate from other medical and behavioral problems. The behavior may be secondary to an underlying medical condition.[3] With chronic stress, impairments to physiological health can manifest. Increased stress in the dog alters hormone levels, thus decreasing natural immunity to various health problems.[4] A visit to the veterinarian is always recommended if a dog's behavior changes suddenly.";
        document.getElementById("image1").src = "../images/Pet advice/3.jpg.jpg ";
    }
   else if(name =="Chealth")
    {
         document.getElementById("para").innerHTML = "An infectious disease is caused by the presence of pathogenic organisms such as viruses, bacteria, fungi, or parasites (either animalian or protozoan). Most of these diseases can spread from cat to cat via airborne pathogens or through direct or indirect contact, while others require a vector such as a tick or mosquito. Certain infectious diseases are a concern from a public health standpoint because they are a Feline zoonosis and transmittable to human.";
        document.getElementById("image1").src = "../images/Pet advice/4.jpg.jpg ";
    }
   else if(name =="Clifestyle")
    {
         document.getElementById("para").innerHTML = "The cat is similar in anatomy to the other felid species: it has a strong flexible body, quick reflexes, sharp teeth and retractable claws adapted to killing small prey. Its night vision and sense of smell are well developed. Cat communication includes vocalizations like meowing, purring, trilling, hissing, growling and grunting as well as cat-specific body language. A predator that is most active at dawn and dusk (crepuscular), the cat is a solitary hunter but a social species. It can hear sounds too faint or too high in frequency for human ears, such as those made by mice and other small mammals.[7] Cats also secrete and perceive pheromones.[8]";
        document.getElementById("image1").src = "../images/Pet advice/5.jpg.jpg ";
    }
   else if(name =="Cstress")
    {
         document.getElementById("para").innerHTML = "When cats greet another cat in their vicinity, they can do a slow, languid, long blink to communicate affection if they trust the person or animal they are in contact with. It is a sign of trust. A way to communicate love and trust to your cat from a human perspective is to say their name, and get their attention, and then look them in the eyes and slowly blink at them to emulate trust and love, and they may return the gesture.[4]";
        document.getElementById("image1").src = "../images/Pet advice/6.jpg.jpg ";
    }
    else{
        alert("invalid");
    }
}
const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')


openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}