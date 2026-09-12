/**
 * Heraforce Global Image Uploader
 * -------------------------------------------------------------
 * Universal Asynchronous Javascript Utility Pipeline
 * Easily hook any file into generic endpoints.
 * 
 * @param {File} fileObject - The raw Javascript File object to be deployed.
 * @param {string} targetFolder - The targeted folder string (e.g "Assets/Projects/").
 * @param {string} apiPathBase - Relative string to correctly route to View-List dependent on caller depth. 
 * @returns {Promise<string>} Returns clean URI path string natively upon completion.
 */
function Hera_Global_Image_Upload(fileObject, targetFolder = "Assets/Global_Uploads/", apiPathBase = "../") {
    return new Promise((resolve, reject) => {
        
        if (!fileObject) {
            reject("Critial Error: No file provided to global uploader.");
            return;
        }

        var fd = new FormData();
        fd.append("global_image", fileObject);
        fd.append("target_folder", targetFolder);

        console.log("Global System Array: Transmitting file > " + targetFolder);

        $.ajax({
            url: apiPathBase + "View-List/Global_Uploader/API_Upload.php",
            type: "POST",
            data: fd,
            processData: false,
            contentType: false,
            cache: false,
            success: function(response) {
                try {
                    let jsonData = JSON.parse(response);
                    if (jsonData[0].error === "0") {
                        console.log("Global File Linked: " + jsonData[0].img_path);
                        resolve(jsonData[0].img_path); // Yield Image Path Back
                    } else {
                        reject(jsonData[0].error);
                    }
                } catch(e) {
                    console.error("Hera Global Payload Failed Parsing :", response);
                    reject("Server passed invalid JSON architecture array string.");
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX Universal Sync Failure:", error);
                reject("Network level error mapping file payload route.");
            }
        });
    });
}
