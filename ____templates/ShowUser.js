const ShowUser = (data) => {
  const UserItem = (userdata) => {
    return `
                          <div>
                            <h3 class="card-title">${userdata.name}</h3>
                            <h6 class="card-subtitle">${userdata.case_id}</h6>
                            <p style="margin-bottom:0px">Address: ${userdata.address}</p>
                            <p>Phone: ${userdata.phone_number}</p>
                            <p>Email: ${userdata.email}</p>
                          </div>
                    `;
  };

  return `
          <div class="row">
              ${data
                .map((item, index) => {
                  return `${UserItem(item)}`;
                })
                .join("")}
          </div>

          `;
};

// const getDetail = (id) => {
//   location.href = "./php/getDetail.php?id=" + id;
// };
